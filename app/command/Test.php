<?php
declare (strict_types = 1);

namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;
use think\facade\Db;

class Test extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('test')
            ->setDescription('the test command');
    }

    protected function execute(Input $input, Output $output)
    {
        // 指令输出
        $output->writeln('test');
        $res=Db::table("user")->insert(["user_name"=>"王五"]);
        if ($res){
            echo "1-success";
        }else{
            echo "0-fail";
        }

    }
}
