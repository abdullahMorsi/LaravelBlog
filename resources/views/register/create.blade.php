<x-layout>

    <main class="max-w-lg mx-auto mt-10 ">
        <x-panel>

        <h1 class="text-center font-bold text-xl">Register!</h1>

        <form method="POST" action="/register" class="mt-10">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="username"/>
            <x-form.input name="email" type="email" autocomplete="new-email"/>
            <x-form.input name="password" type="password" autocomplete="new-password"/>
            <x-form.button>Submit</x-form.button>

        </form>
        </x-panel>
    </main>
</x-layout>