<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $db   = env('DB_DATABASE');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $host = env('DB_HOST');
        
        
    
        $storagePath = storage_path('app');
        
        
        $sqlFile     = $storagePath . '/backup-2026-07-15.sql';
        
        $zipFile     = $sqlFile . '.zip';
    
        // unzip if zip exists
        if (file_exists($zipFile)) {
    
            $zip = new \ZipArchive;
    
            if ($zip->open($zipFile) === TRUE) {
                $zip->extractTo($storagePath);
                $zip->close();
    
                $this->info('ZIP extracted successfully');
            } else {
                $this->error('Failed to open ZIP file');
                return;
            }
        }
    
        // check sql file
        if (!file_exists($sqlFile)) {
            $this->error('SQL file not found');
            return;
        }
    
        // import database
        $command = sprintf(
            'mysql -h %s -u %s -p"%s" %s < "%s"',
            $host,
            $user,
            $pass,
            $db,
            $sqlFile
        );
    
        exec($command, $output, $result);
    
        if ($result === 0) {
            $this->info('Database imported successfully');
        } else {
            $this->error('Database import failed');
        }
    }
}