@extends('layouts.master')

@section('title')
@parent
Home
@stop

@section('styles')
@stop

@section('sidebar')
@stop

@section('content')
<div class="content first" id="home">
    <div class="abs-cen fadeIn animated" id="abs-cen">
        <div class="main-msg">
            <h1 class="bounceIn animated">Imran Ismail</h1>
            <p class="bounceIn animated">Freelance Web Developer</p>
            
            <label class="btn" for="toggle-1">LEARN MORE</label>
        </div>
    </div> 
</div>

<div class="content second" id="education">
    <div class="row" >
        <h5>Education</h5>
        <ul>
            <li>
                <p>University of Kuala Lumpur</p>
                <small>Diploma of Engineering Technology in Computing</small>
            </li>
        </ul>
         
    </div>
</div>

<div class="content third" id="work">
    <div class="row" >
        <h5>Recent Work</h5>
        
        <ul>
            <li>
                <p>Elibrary</p>
                <small>Online web application to manage e-books. <a href="http://meepwn.com/elibrary" style="color:white" target="_blank">Link</a></small>
            </li>
        </ul>

    </div>
</div>
@stop
