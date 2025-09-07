<x-layout>
    <form action="{{ route('progress.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ninja Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ninja Name" required>
        </div>
        <div class="mb-3">
            <label for="skill" class="block mb-2 text-sm font-medium text-gray-9">Ninja Skills</label>
            <input type="number" id="skill" name="skill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ninja Skills" required>
        </div>
        <div class="mb-3">
            <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
            <textarea id="bio" name="bio" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..." required></textarea>
        </div>
        <div class="mb-3">
            <label for="dojo_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dojo:</label>
            <select id="dojo_id" name="dojo_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @foreach($dojos as $dojo)
                    <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


    </form>
</x-layout>