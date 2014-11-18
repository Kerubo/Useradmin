@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
 
<div class='col-lg-4 col-lg-offset-4'>
 
<div class="header"> 
<link rel="stylesheet" href="/css/layout.css" />
<nav style="margin-left:100px  style="text-decoration:none;"> 
<a href="/home" style="text-decoration:none;">HOME</a> 
<a href="/about"  style="text-decoration:none;">ABOUT</a> 
<a href="/contact"  style="text-decoration:none;">PRODUCTS</a> 
<a href="/products" style="text-decoration:none;">CONTACTS</a></nav> 
</div> 

    <p >Have an account 
    <a href="auth/login"><i class="fa fa-lock" ></i> 
LOGIN</a></p>
    <p >or Create a new account 
    <a href="auth/signup" ><i class="fa fa-sign-in"></i>SIGNUP</a></p> 


<img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943066_4269a28a2b_z.jpg">
 
<div class="footer"></div>
</div>
 
@stop