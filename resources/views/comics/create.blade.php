@extends('layouts.main')

@section('form-section')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <form action="{{route('comics.store')}}" method="post">
                    @csrf

                    <label for="name">Title</label>
                    <input type="text" name ='title' id="name">
                    
                    <label for="name">Description</label>
                    <input type="text" name ='description' id="description">
                    
                    <label for="name">Thumb</label>
                    <input type="text" name ='thumb' id="thumb">
                    
                    <label for="name">Prezzo</label>
                    <input type="text" name ='price' id="price">
                    
                    <label for="name">Serie</label>
                    <input type="text" name ='series' id="series">
                    
                    <label for="name">Uscita</label>
                    <input type="text" name ='sale_date' id="sale_date">
                    
                    <label for="name">Tipo</label> 
                    <input type="text" name ='type' id="type">

                    <input type="submit" value= 'invia'>
                </form>
            </div>
        </div>
    </div>
@endsection
