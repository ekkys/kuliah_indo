<div id="dataSiswa" class="col">
    <table class="table hover">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-border " id="name" name="name" value="{{ $user->name }}"  required>
                        <input class="form-control form-control-boder" type="text" name="name" value="{{ $user->name }}"></td>
                    <td>
                        <label class="radio-inline">
                            <input id="aktif" type="radio" name="keterangan" value="Hadir" checked>Hadir
                        </label>
                        <label class="radio-inline">
                            <input id="aktif" type="radio" name="keterangan" value="Alfa" >Alfa
                        </label>
                        <label class="radio-inline">
                            <input id="aktif" type="radio" name="keterangan" value="Izin" >Izin
                        </label>
                        <label class="radio-inline">
                            <input id="aktif" type="radio" name="keterangan" value="Sakit" >Sakit
                        </label>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
</div>