<?php

use Illuminate\Support\Facades\Route;

route::view("/", "posts.home")->name("home");

route::view("/register", "auth.register")->name("register");