<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\WebsiteUser;
use Debugbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class SetDatabaseConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $config = Auth::user()->databaseConfig;
            Config::set('database.connections.sqlsrv.host', $config->host);
            Config::set('database.connections.sqlsrv.port', $config->port);
            Config::set('database.connections.sqlsrv.database', $config->database);
            Config::set('database.connections.sqlsrv.username', $config->username);
            Config::set('database.connections.sqlsrv.password', $config->password);
        } else {
            Debugbar::info('not authenticated');
        }
        
        return $next($request);
    }
}
