<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="{{asset('dex.js')}}"></script>
<script>


    function clean(s)
    {
       if(s < 45)
       {
           return "C"
       }
       else if( s < 90)
       {
           return "B"
       }
       else if( s < 135)
       {
           return "A"
       }
       else if( s <= 180)
       {
           return "AA"
       }
       else if( s < 300)
       {
           return "S"
       }
        
    }

    function clean250(s){
        if(s < 45 * 2)
       {
           return "C"
       }
       else if( s < 90 * 2)
       {
           return "B"
       }
       else if( s < 135 * 2)
       {
           return "A"
       }
       else if( s <= 180 * 2)
       {
           return "AA"
       }
       else if( s < 300 * 2)
       {
           return "S"
       }
    }

    function baseStats(b){
        var a = {}
        a.hp = clean(b.hp)
        a.atk = clean250(b.atk + b.spa)
        a.def = clean250(b.def + b.spd)
        // b.spa = clean(b.spa)
        // b.spd = clean(b.spd)
        a.spe = clean(b.spe)

        return a
    }
    $(document).ready(function(){

            Object.entries(dex).forEach(element => {
                e  = element[1];
                console.log(
                    {
                        species:e.species,
                        prevo:e.prevo,
                        evos:e.evos,
                        types:e.types,
                        stats:baseStats(e.baseStats)
                    }
                )
                
            

        });


    })
</script>
</head>
<body>
    
</body>
</html>