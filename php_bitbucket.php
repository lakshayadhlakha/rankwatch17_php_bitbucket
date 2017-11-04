<?php

//require_once __DIR__.'/../vendor/autoload.php';

$user = new Bitbucket\API\User;

// Your Bitbucket credentials
$bb_user = 'username';
$bb_pass = 'password';



// login
$user->setCredentials( new Bitbucket\API\Authentication\Basic($bb_user, $bb_pass) );


# get user privileges
#print_r($user->privileges());

# get a list of repositories an account follows
print_r($user->follows());

# get a list of repositories visible to an account
#print_r($user->repositories()->get());

# get a list of repositories the account is following
#print_r($user->repositories()->overview());

# get the list of repositories on the dashboard
#print_r($user->repositories()->dashboard());

# link in form of https://username@bitbucket.org/username/reponame.git