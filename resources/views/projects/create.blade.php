<x-app-layout>
    <x-slot name="header" />

    <x-slot>
        <form method="POST" action="/projects" class="container" style="padding-top: 40px">
        @csrf

        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label for="title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" placeholder="Title">
            </div>
        </div>

        <div>
            <label for="description">Description</label>

            <div class="control">
                <textarea class="input" type="text" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
    </x-slot>
</x-app-layout>
