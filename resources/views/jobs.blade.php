<x-layout >
  <x-slot:heading>
    Jobs Listing
  </x-slot:heading>

    @foreach($jobs as $job)
        <li class="text-blue-700 hover:underline">
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}</strong> <br >
            </a>
        </li>
    @endforeach
</x-layout >
