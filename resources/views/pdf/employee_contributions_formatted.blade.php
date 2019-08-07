<!DOCTYPE html>
<html>
<head>
        
    <title></title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            color: #1f2877;
            font-family: "Sans-serif";
            font-size: 12px;
        }
        div{
            margin-top: 10px;
        }

        hr{
            height: 1px;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
        }

        .pull-right{
            float: right;
        }

        .table-header{
            width: 97%;
            overflow: auto;
            font-weight: bold;
        }

        .table-header div{
            width: 33%;
            float: left;
            margin: 0%;
            padding: 5px;
            border-bottom: 1.5px solid #1f2877;
        }

        .table-body{
            width: 97%;
            overflow: auto;
        }

        .table-body div{
            width: 33%;
            float: left;
            margin: 0%;
            padding: 5px;
            /* border-bottom: 1px solid #1f2877; */
        }

        .text-center{
            text-align: center;
        }
        
        .text-right{
            text-align: right;
        }

        .text-black{
            color: black !important;
        }

        .border-black{
            border-bottom: 1px solid black;
        }

        .bg-black{
            background: black;
        }

        .b{
            font-weight: bold;
        }

    </style>

</head>
<body>

    {{--  Company Info Header  --}}
    <div style="text-align:center;">
        <h1>COCOA HEALTH AND EXTENSION DIVISION</h1>
        <h2>COCOA MUTUAL REPORT</h2>
        <h4> EASTERN </h4>
    </div>
    <br/>
    <div>
        <b>NAME: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->fullname }}</b>
    </div>
    <div>
        <b>STAFF ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->username }}</b>
        <b class="pull-right">TERMINATED/RETIREDSTAFF?: &nbsp;&nbsp;&nbsp;
            @if( !empty($user->deleted_at) )
                YES
            @else
                NO
            @endif
        </b>
    </div>

    <hr/>

    @php
        $current_balance = 0;    
        $total_contribution = 0;    
        $total_with_interest = 0;  
        $total_interest = 0;    
    @endphp

        @if( empty($roll_over) )
            OPENING BALANCE <b class="pull-right">0.00</b>
        @else
            ({{ $roll_over->formatted_start_date }} - {{ $roll_over->formatted_end_date }}) OPENING BALANCE <b class="pull-right">{{ $roll_over->formatted_old_balance }}</b>

            @php
                $current_balance = $roll_over->balance - $roll_over->amount_withdrawn;   
            @endphp
        @endif
    <hr/>

        
    <div class="table-header">
        <div class="table-header-div">MONTH</div>
        <div class="text-center table-header-div">CONTIBUTION</div>
        <div class="text-center table-header-div ">BALANCE</div>
    </div>
    


    

    @foreach ($contributions as $contribution)
        
        <br/>
        <br/>
        <div class="table-body">
            <div class=" border-black">{{ $contribution->formatted_date }}</div>
            <div class="text-center text-black  border-black">
                @php
                    $total_contribution += $contribution->amount;
                @endphp
                {{ $contribution->formatted_amount }}
            </div>
            <div class="text-center text-black  border-black">
                @php
                    $current_balance = $current_balance + $contribution->amount;   
                @endphp
                {{ number_format( $current_balance, 2 ) }}
            </div>
        </div>

    @endforeach

        {{--  Total Section  --}}
        <br/>
        <br/>
        <div class="table-body">
            <div class="text-black border-black">TOTAL</div>
            <div class="text-center text-black  border-black">
                {{ number_format( $total_contribution, 2 ) }}
            </div>
            <div class="text-center text-black  border-black">
                {{ number_format( $current_balance, 2 ) }}
            </div>
        </div>

        {{--  Interest Section  --}}
        <br/>
        <br/>
        <div class="table-body">
            <div class="text-black border-black">{{ date('Y')}} INTEREST
                @if( empty( $interest ) )
                    0 (%)
                @else
                    {{ $interest->amount }}
                    (%)

                    @php
                        $total_interest = ( $interest->amount / 100 ) * $current_balance;
                        $total_with_interest = $current_balance + $total_interest;
                    @endphp

                @endif                
            </div>
            <div class="text-center text-black  border-black">
                &nbsp;
            </div>
            <div class="text-center text-black  border-black">
                {{ number_format( $total_interest, 2 ) }}
            </div>
        </div>

        {{--  Total with Interest Section  --}}
        <br/>
        <br/>
        <div class="table-body">
            <div class="text-black border-black">TOTAL WITH INTEREST</div>
            <div class="text-center text-black  border-black">
                &nbsp;
            </div>
            <div class="text-center text-black  border-black">
                {{ number_format( $total_with_interest, 2 ) }}
            </div>
        </div>

        {{--  Year Withdraw Section  --}}
        <br/>
        <br/>
        <div class="table-body">
            <div class="text-black border-black">{{ date('Y') }} WITHDRAWAL</div>
            <div class="text-center text-black  border-black">
                &nbsp;
            </div>
            <div class="text-center text-black  border-black">
                {{ number_format( $withdrawal, 2 ) }}
            </div>
        </div>

        {{--  Balance  --}}
        <br/>
        <br/>
        <div class="table-body">
            <div class="text-black border-black b">BALANCE AS AT</div>
            <div class="text-center text-black  border-black">
                &nbsp;
            </div>
            <div class="text-center text-black  border-black b">
                @php
                    $total_current_balance = $total_with_interest - $withdrawal;
                @endphp
                {{ number_format( $total_current_balance, 2 ) }}
            </div>
        </div>
    
    

</body>
</html>