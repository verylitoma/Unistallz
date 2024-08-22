<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

route::view("/", "posts.home")->name("home");

route::view("/login", "auth.login")->name("login");
route::post("/login", [AuthController::class, "login"]);

route::view("/register", "auth.register")->name("register");
route::post("/register", [AuthController::class, "register"]);