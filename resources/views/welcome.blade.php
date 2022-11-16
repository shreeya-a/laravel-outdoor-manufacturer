<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <h1 style="text-align:center">Outdoor Pvt. Ltd.</h1>
    <form action="{{route('saveBatch')}}" method="POST">
        @csrf
        <div>
            <div class="mb-3">
                <label for="batch">
                    Batch number:
                    <input type="text" name="Batch"  id="batch" class="form-control">
                </label>
            </div>
            <div class="mb-3">
                <label for="quantity">
                    Quantity:
                    <input type="text" name="Quantity" id="quantity" class="form-control">
                </label>
            </div>
            <div class="mb-3">
            <label for="status">Status:</label>
                <select name="Status" id="status" class="form-control">
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Bad">Bad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="remarks">
                    <p>Remarks:</p> 
                    <textarea name="Remarks" id="remarks" cols="30" rows="10" class="form-control"></textarea>
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>

        </div>

    </form>

    <table class="table table-dark">
  <thead>
    <th>SN</th>
    <th>Batch No</th>
    <th>Quantity</th>
    <th>Manufacture date</th>
    <th>Status</th>
    <th>Remarks</th>
  </thead>
  <tbody>
    @foreach ($list as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value->Batch}}</td>
            <td>{{$value->Quantity}}</td>
            <td>{{$value['created_at']}}</td>
            <td>{{$value->Status}}</td>
            <td>{{$value->Remarks}}</td>
        </tr>
    @endforeach
   
  </tbody>
</table>
</body>
</html>