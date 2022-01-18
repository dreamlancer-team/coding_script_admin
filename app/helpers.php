
<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @return int
 */
if (!function_exists('getLoggedInUserId')) {
    function getLoggedInUserId()
    {
        return Auth::id();
    }
}

/**
 * @return User
 */
if (!function_exists('getLoggedInUser')) {
    function getLoggedInUser()
    {
        return Auth::user();
    }
}

/**
 * return user full name
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserFullName')) {
    function getLoggedInUserFullName()
    {
        return ucfirst(Auth::user()->first_name) . ' ' . Auth::user()->last_name;
    }
}

/**
 * return user name
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserName')) {
    function getLoggedInUserName()
    {
        return ucfirst(Auth::user()->first_name);
    }
}

/**
 * return user email
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserEmail')) {
    function getLoggedInUserEmail()
    {
        return Auth::user()->email;
    }
}

/**
 * return slug.
 *
 * @return string
 */
if (!function_exists('slug')) {
    function slug($string)
    {
        return Str::slug($string);
    }
}
