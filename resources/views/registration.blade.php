@extends('index')

@section('pageTitle')
    Registration
@endsection

@section('container')
        <form action="" class = "box">
            <h2 class="title-text">Registration</h2>
            <ul class="course-list">
                <li>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p>COURSE</p>
                    </div>
                    <div>
                        <p>CREDITS</p>
                    </div>
                    <div>
                        <p>GRADE TYPE</p>
                    </div>
                    <div>
                        <p>STATUS</p>
                    </div>
                    <div>
                        <p>GRADES</p>
                    </div>
                </li>
                <li>
                    <div><input class="checkbox" type="checkbox" name="Registar" value="1"></div>
                    <div><h1>CSE 101</h1><p>Section 001</p></div>
                    <div><p>3.0 Credits</p></div>
                    <div><p>Normal</p></div>
                    <div><p>Enrolled</p></div>
                    <div><p>***/***</p></div>
                </li>
                
                <li>
                    <div><input class="checkbox" type="checkbox" name="Registar" value="1"></div>
                    <div><h1>HSS 101</h1><p>Section 001</p></div>
                    <div><p>3.0 Credits</p></div>
                    <div><p>Normal</p></div>
                    <div><p>Enrolled</p></div>
                    <div><p>***/***</p></div>
                </li>
                
                <li>
                    <div><input class="checkbox" type="checkbox" name="Registar" value="1"></div>
                    <div><h1>CHY 100</h1><p>Section 001</p></div>
                    <div><p>3.0 Credits</p></div>
                    <div><p>Normal</p></div>
                    <div><p>Enrolled</p></div>
                    <div><p>***/***</p></div>
                </li>
                
                <li>
                    <div><input class="checkbox" type="checkbox" name="Registar" value="1"></div>
                    <div><h1>PHY 102</h1><p>Section 001</p></div>
                    <div><p>3.0 Credits</p></div>
                    <div><p>Normal</p></div>
                    <div><p>Enrolled</p></div>
                    <div><p>***/***</p></div>
                </li>
                <li>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p class="bold">Total credits:</p>
                    </div>
                    <div>
                        <p class="bold">12.0 Credits</p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </li>
            </ul>
            <input class="btn" type="submit" value="Submit">
        </form>

@endsection