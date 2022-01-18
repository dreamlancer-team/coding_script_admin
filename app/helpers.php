
<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @return int
 */
function getLoggedInUserId()
{
    // return Auth::id();
    return 1;
}

/**
 * @return User
 */
function getLoggedInUser()
{
    return Auth::user();
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
