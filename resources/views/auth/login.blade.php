<x-layout>

    <br>
    <h1> Welcome back </h1>

    <div>

        <form action="{{ route("login") }}" method="post">
            @csrf

            E-mail:
            <br>
            <input type="text" name="email" value={{old("email")}}>
            <br>
            @error("email")
                {{$message}}
            @enderror
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

            Remember me
            <input type="checkbox" name="rememberme" id="rememberme">


            @error("failed")
                {{$message}}
            @enderror
            <input type="submit" name="login" value="Log-In">
        </form>

    </div>

</x-layout>