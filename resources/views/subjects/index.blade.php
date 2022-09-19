<x-app-layouts title="Mata Kuliah">

    <div class="container">
        <h1>All Subjects</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="/subject" method="get">
                    <div class="input-group mb-3 mt-2">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Matakuliah</th>
                  <th scope="col">Dosen Pengampuh</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $index => $subject)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ $subject->name_subject}}</td>
                  <td>{{ $subject->teacher }}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    
    </x-app-layouts>