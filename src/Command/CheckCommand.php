<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;


class CheckCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io)
    {

      // load model
      $this->loadModel('Categories');
      //debug($this->Categories);

      /*
      $categories = $this->Categories->find()
      ->where([
        'id' => 1
      ]);
      */

      // save data avec ou sans foreach....

      foreach ($cats as $key => $cat)
      {
        $io->info($cat['name']);
      }
    }


}
