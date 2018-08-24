@extends('main')
@section('content')
    <form action="http://localhost/FamilyTree/public/SubmitMember" method="post">
    {{csrf_field()}}
        <input Name="ID" type="text" placeholder="ID Number" /><br/><br/>
        <input Name="Father" type="text" placeholder="Father ID" /><br/><br/>
        <input Name="Mother" type="text" placeholder="Mother ID" /><br/><br/>
        <input Name="Hasbend" type="text" placeholder="Hasbend ID " /><br/><br/>
        <input Name="Name" type="text" placeholder="Full Name" /><br/><br/>
        
       <b>Birth Date</b><br> <input Name="Date" type="date"  placeholder="BirthDate" /><br/><br/>
         <select name="Gender" size="1" >
            <option value="g">Select Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="o">Other</option>
        </select> <br/><br/>
        <input type="submit" value="submit" />
    </form>

@endsection