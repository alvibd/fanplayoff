window.onload = function () {

    document.getElementById('bench').onclick = function() {
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value) ;
        var b_tt = parseInt(document.getElementById('bench-data-f').value);
        
    }



    document.getElementById('k-id').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;

        

        
    }

    

    document.getElementById('def').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;
    }


    document.getElementById('flex').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }


    document.getElementById('te-id').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }

    document.getElementById('wr-id').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }

    document.getElementById('rb-id').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }

    document.getElementById('qb-id').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }

    document.getElementById('bench').onclick = function s_data() {
        var qb_v = parseInt(document.getElementById('qb-id').value);
        var rb_v = parseInt(document.getElementById('rb-id').value);
        var wr_v = parseInt(document.getElementById('wr-id').value);
        var te_v = parseInt(document.getElementById('te-id').value);
        var flex_v = parseInt(document.getElementById('flex').value);
        var def_v = parseInt(document.getElementById('def').value);
        var k_v = parseInt(document.getElementById('k-id').value);
        var bench_v = parseInt(document.getElementById('bench').value);

        // if (bench_v == 1){
        //     document.getElementById("bench").setAttribute(
        //     "style", "background-color: red; background-size: 20%;");
        // }

        var starters_count = qb_v + rb_v + wr_v + te_v + flex_v + def_v + k_v;
        var total_count = bench_v + starters_count;

        document.getElementById('starters-data-f').value = starters_count;
        document.getElementById('bench-data-f').value = parseInt(document.getElementById('bench').value);
        document.getElementById('roster-data-f').value = total_count;


        return starters_count;



        // document.getElementById('starters-data-f').value =  qb_v + rb_v;
    }
    
};