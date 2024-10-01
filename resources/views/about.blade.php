<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container px-4 my-8 bg-slate-100">
        <div class="p-8 bg-white shadow rounded-lg">
            <h3 class="text-3xl text-slate-700 font-bold mb-4">
                Daftar Mahasiswa
            </h3>
            @php
                $i = 1;
            @endphp
            @foreach ($mahasiswa as $mhs)
                <span class="font-bold-text-slate-700 text-lg">{{ $i }}.</span>
                <ul class="mb-4">
                    <li>
                        <span class="font-semibold text-slate-600 capitalize">npm :</span> {{ $mhs['npm'] }}
                    </li>
                    <li>
                        <span class="font-semibold text-slate-600 capitalize">nama :</span> {{ $mhs['nama'] }}
                    </li>
                    <li>
                        <span class="font-semibold text-slate-600 capitalize">email :</span> {{ $mhs['email'] }}
                    </li>
                    <li>
                        <span class="font-semibold text-slate-600 capitalize">jurusan :</span> {{ $mhs['jurusan'] }}
                    </li>
                </ul>
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </div>
</x-layout>
