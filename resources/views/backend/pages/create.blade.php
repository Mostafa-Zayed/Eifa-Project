<div class="modal-body">
    <!-- add_form -->
    <form action="{{ route('Grades.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="Name"
                       class="mr-sm-2">{{ trans('Grades_trans.stage_name_ar') }}
                    :</label>
                <input id="Name" type="text" name="Name" class="form-control">
            </div>
            <div class="col">
                <label for="Name_en"
                       class="mr-sm-2">{{ trans('Grades_trans.stage_name_en') }}
                    :</label>
                <input type="text" class="form-control" name="Name_en" required>
            </div>
        </div>
        <div class="form-group">
            <label
                for="exampleFormControlTextarea1">{{ trans('Grades_trans.Notes') }}
                :</label>
            <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                      rows="3"></textarea>
        </div>
        <br><br>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary"
            data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
    <button type="submit"
            class="btn btn-success">{{ trans('Grades_trans.submit') }}</button>
</div>
</form>

</div>
