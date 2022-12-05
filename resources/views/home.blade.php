@extends('layouts.app')

@section('content')

    <h1>HOME</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloremque et minus dolorum quos, molestias repudiandae itaque illo iste cum ipsam neque blanditiis nulla aliquid at officia! Aut, quae aliquam.</p>

@endsection

@section('sidebar')
    @parent
    <p>This is append to sidebar</p>
@endsection