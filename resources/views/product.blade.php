@extends('_layouts.main') 

@section('content')
<!-- ===== Main Content Start ===== -->
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <h2 class="mb-7.5 mt-2 text-center text-title-md2 font-bold text-black">
            | Avalaible Cars |
        </h2>
        <div class="bg-gray-100 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Available Now!</h2>
            <p class="text-gray-600">
                Each car wears an 'Available' tag, eager to embark on your next chapter. Swipe through our digital
                showroom, pick your steed, and let the road unravel your story.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-4">
            @foreach ($cars as $car)
                <div class="rounded-sm border border-stroke bg-white shadow-default">
                    <a href="#" class="block px-4 pt-4">
                        <img class="object-cover h-60 w-96" src="src/images/cars/{{ $car->photo }}" alt="Cars Image" />
                    </a>

                    <div class="p-6 overflow-hidden">
                        <h4 class="mb-3 text-xl font-semibold text-black">
                            <a href="#">{{ $car->name }}</a>
                        </h4>
                        <p class="font-medium">
                            {{ $car->license_plate }}
                        </p>
                        <span class="flex items-center gap-1 text-sm font-medium text-meta-3 items-end justify-between">
                            Avalaible
                            <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                    fill="" />
                            </svg>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection