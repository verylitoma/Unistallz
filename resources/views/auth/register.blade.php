<x-layout>

    <br>
    <h1> Register a new User </h1>

    <div>

        <form action="{{ route("register") }}" method="post">
            @csrf

            Username:
            <br>
            <input type="text" name="username" value="{{old("username")}}">
            <br>
            @error("username")
                {{$message}}
            @enderror
            <br>
            <br>

            E-mail:
            <br>
            <input type="text" name="email" value={{old("email")}}>
            <br>
            @error("email")
                {{$message}}
            @enderror
            <br>
            <br>

            Password:
            <br>
            <input type="password" name="password">
            <br>
            @error("password")
                {{$message}}
            @enderror
            <br>
            <br>

            Confirm Password:
            <br>
            <input type="password" name="password_confirmation">
            <br>
            <br>

            <input type="submit" name="Register">
        </form>

    </div>

</x-layout>