<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details</title>
   

    <style>

        #details{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        #details td,#details th{
            border:1px solid #ddd;
            padding: 8px;
        }

        #details tr:nth-child(even){
            background-color: #54a0d6;
        }

        #details th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: #fff;

        }
        h2{
            text-align:center;
        }

    </style>




</head>
<body>
    <h2 >Bank Account Details</h2>
    <table id="details">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>Branch Name</th>
                <th>Account Holder's Name</th>
                <th>Account Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data) 
            <tr>
                <td>{{$data->bname}}</td>
                <td>{{$data->branch}}</td>
                <td>{{$data->accname}}</td>
                <td>{{$data->accnumber}}</td>
            </tr>
            @endforeach 
        </tbody>
    </table> 
    


</body>
</html>