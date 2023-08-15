<?php

if (!defined('WHMCS')) {
    define('WHMCS', true);
}

// use WHMCS\Database\Capsule;
use Illuminate\Database\Capsule\Manager as Capsule;

// Require the necessary files
require_once dirname(__DIR__) . '/modules/marketplace/addons/marketplace/marketplace.php';

class WHMCSTestCase extends \PHPUnit\Framework\TestCase {
    protected $capsule;

    public function setUp(): void {
        // Initialize WHMCS capsule instance
        $this->capsule = new Capsule();

        // Add SQLite in-memory connection for testing
        $this->capsule->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);

        // Boot and set Capsule instance globally
        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();

        // Run the marketplace_activate function to set up tables for tests
        marketplace_activate();

        //         // Create the `marketplace_domains` table for tests
        // Capsule::schema()->create('marketplace_domains', function ($table) {
        //     $table->increments('id');
        //     $table->string('domain');
        //     $table->string('status');
        //     $table->timestamps();
        // });
    }

    public function tearDown(): void {
        // Drop the tables after tests
        marketplace_deactivate();

        // Reset capsule instance
        $this->capsule = null;
    }
}
