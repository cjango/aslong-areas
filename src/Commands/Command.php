<?php

namespace AsLong\Area\Commands;

use Illuminate\Console\Command as LaravelCommand;

class Command extends LaravelCommand
{

    protected $signature = 'aslong:areas';

    protected $description = 'Install AsLong-Area';

    public function handle()
    {
        // 创建数据库结构
        $this->call('migrate');
        // 迁移数据
        $this->call('db:seed', [
            '--class' => AsLongAreasTableSeeder::class,
        ]);
        $this->info('Database migrate success');
    }

}
