<?php
declare(strict_types=1);

namespace App\Command;

use DateTime;

use Cake\Core\Configure;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Client;


/**
 * FetchApods command.
 */
class FetchApodsCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {

      $this->loadModel('Apods');

      $api_key = Configure::read('Api.NASA');
      $http = new Client();
      $response = $http->get('https://api.nasa.gov/planetary/apod', ['api_key' => $api_key]);

      //$io->info($response->getStringBody());

      //debug($response);

      $json = $response->getJson();

      //debug($json);

      $apods = $this->getTableLocator()->get('Apods');

      $apod = $apods->newEntity($json);

      $apods->save($apod);      
    }
}
