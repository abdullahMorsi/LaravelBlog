<x-layout>

    <main class="max-w-lg mx-auto mt-10 ">
        <x-panel>
            <h1 class="text-center font-bold text-xl">Login</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf
                <x-form.input name="email" type='email' autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="old-password"/>
                <x-form.button>Submit</x-form.button>
            </form>
        </x-panel>

    </main>
</x-layout>
