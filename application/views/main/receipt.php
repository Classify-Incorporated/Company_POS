<style>

@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;
}
.container {
    display: block;
    width: 100%;
    background: #fff;
    max-width: 350px;
    padding: 25px;
    margin: 50px auto 0;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}
.receipt_header {
    padding-bottom: 40px;
    border-bottom: 1px dashed #000;
    text-align: center;
}

.receipt_header h1 {
    font-size: 20px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.receipt_header h1 span {
    display: block;
    font-size: 25px;
}

.receipt_header h2 {
    font-size: 14px;
    color: #727070;
    font-weight: 300;
}
.receipt_header h2 span {
    display: block;
}

.receipt_body {
    margin-top: 15px;
}

table {
    width: 100%;
}
thead, tfoot {
    position: relative;
}

thead th:not(:last-child) {
    text-align: left;
}

thead th:last-child {
    text-align: right;
}

thead::after {
    content: '';
    width: 100%;
    border-bottom: 1px dashed #000;
    display: block;
    position: absolute;
}

tbody td:not(:last-child), tfoot td:not(:last-child) {
    text-align: left;
}

tbody td:last-child, tfoot td:last-child{
    text-align: right;
}

tbody tr:first-child td {
    padding-top: 15px;
}

tbody tr:last-child td {
    padding-bottom: 15px;
}

tfoot tr:first-child td {
    padding-top: 15px;
}

tfoot::before {
    content: '';
    width: 100%;

    display: block;
    position: absolute;
}
#aw {
        font-weight: bold;
        font-size: 15px;
        text-align: center; 
        padding-left: 40px;      
    }
.recepit_cont {
    display: flex;
    justify-content: center;
    column-gap: 25px;
    font-weight: bold;
    font-size: 15px;    
}
.items {
    margin-top: 20px;
}
h3 {
    border-top: 1px dashed #000;
    padding-top: 10px;
    margin-top: 25px;
    text-align: center;
    text-transform: uppercase;
    font-size:10px
}
</style>

<div class="container">
    <div class="receipt_header">
    <h1><i class="fas fa-fish"></i> FISH PORT</h1>
    </div>
    <div class="receipt_body">
        <div class="recepit_cont">
        <div class="username">Cashier Name: Fishport</div>
        </div>
        <div class="items">
            <table>
                <thead>
                    <th>ITEM NAME</th>
                    <th></th>
                </thead>
                <!--diri ma display ang mga content sang gin bakal-->
                <tbody>
                    <tr>
                        <td>Squid (weight) x (price) </td>
                        <td></td>
                        <td>200</td>
                    </tr>
                </tbody>    
                <thead>
                <th>Total</th>
                    <th></th>
                </thead>    
               <tfoot>
                    <tr>
                        <td id="aw">Payment Method</td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td>Cash</td>
                        <td></td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Change</td>
                        <td></td>
                        <td>300</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <h3>Order No.: O-001 | Date:05/10/23</h3>
    <div class="print-button" id="printButton">
        <i class="fas fa-print"></i> Print
    </div>
</div>
<script>
document.getElementById('printButton').addEventListener('click', function() {
    this.style.display = 'none';
    window.print();
    this.style.display = 'block';
});
</script>