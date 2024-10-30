<x-layout >
  <x-slot:heading>
    Jobs Listing
  </x-slot:heading>

    @foreach($jobs as $job)
        <li class="hover:underline">
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}</strong> <br >
                <small>{{ $job['description'] }}</small>
            </a>
        </li>
    @endforeach
</x-layout >
