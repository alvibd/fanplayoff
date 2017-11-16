<?php

use Illuminate\Database\Seeder;

class ScoringCriteriasTableSeeder extends Seeder
{
    private $criterias = [];

    private function createCriterias()
    {
        /*******************************
         * Start Defense/Special Team
         * ***********************
         */
        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Sack',
            'default_point' => '1',
            'starts_from' => 0,
            'ends_at' => 2
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Interception',
            'default_point' => '2',
            'starts_from' => 0,
            'ends_at' => 3
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Fumble Recovery',
            'default_point' => '2',
            'starts_from' => 0,
            'ends_at' => 3
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Touchdown',
            'default_point' => '6',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Safety',
            'default_point' => '2',
            'starts_from' => 0,
            'ends_at' => 2
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Block Kick',
            'default_point' => '2',
            'starts_from' => 0,
            'ends_at' => 4
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Kickoff and Punt return Touchdowns',
            'default_point' => '6',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 0 Point',
            'default_point' => '10',
            'starts_from' => 5,
            'ends_at' => 20
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 1-6 Point',
            'default_point' => '7',
            'starts_from' => 5,
            'ends_at' => 15
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 7-13 Point',
            'default_point' => '4',
            'starts_from' => 2,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 14-20 point',
            'default_point' => '1',
            'starts_from' => 0,
            'ends_at' => 5
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 21-27 point',
            'default_point' => '0',
            'starts_from' => -1,
            'ends_at' => 1
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 28-34 point',
            'default_point' => '-1',
            'starts_from' => -3,
            'ends_at' => 1
        ];

        $this->criterias[] = [
            'type' => 'Defense/Special Team',
            'name' => 'Points Allowed 35+ Point',
            'default_point' => '-2',
            'starts_from' => -6,
            'ends_at' => 0
        ];

        /*********************************
         * End of Defense/Special Teams
         * *************************
         */

        /*********************
         * Start of offense
         * *************
         */
        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Passing Yards',
            'is_fixed' => true,
            'default_point' => '25 Yards Per Point'
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Passing Touchdowns',
            'default_point' => '4',
            'starts_from' => 2,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Interceptions',
            'default_point' => '-1',
            'starts_from' => -2,
            'ends_at' => 0
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Rushing yards',
            'default_point' => '10 Yards Per Point',
            'is_fixed' => true
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Rushing Touchdowns',
            'default_point' => '6',
            'is_fixed' => true
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Receptions',
            'default_point' => '1',
            'starts_from' => 0,
            'ends_at' => 1
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Receiving Yards',
            'default_point' => '10 Yards Per Point',
            'is_fixed' => true
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Receiving Touchdowns',
            'default_point' => '6',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Return Touchdowns',
            'default_point' => '6',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => '2-Points Conversions',
            'default_point' => '2',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Fumble Lost',
            'default_point' => '-2',
            'starts_from' => -2,
            'ends_at' => 0
        ];

        $this->criterias[] = [
            'type' => 'Offense',
            'name' => 'Offensive Fumble Return TD',
            'default_point' => '6',
            'starts_from' => 0,
            'ends_at' => 6
        ];

        /*******************
         * End of Offense
         * ***********
         */

        /*
         * Start of Kickers
         */
        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Field Goals 0-19 Yards',
            'default_point' => '2',
            'starts_from' => 1,
            'ends_at' => 3
        ];

        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Field Goals 20-29 Yards',
            'default_point' => '3',
            'is_fixed' => true
        ];

        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Field Goals 30-39 Yards',
            'default_point' => '3',
            'starts_from' => 3,
            'ends_at' => 4
        ];

        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Field Goals 40-49 Yards',
            'default_point' => '4',
            'starts_from' => 4,
            'ends_at' => 5
        ];

        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Field Goals 50+ Yards',
            'default_point' => '5',
            'starts_from' => 5,
            'ends_at' => 6
        ];

        $this->criterias[] = [
            'type' => 'Kickers',
            'name' => 'Points After Attempt Made',
            'default_point' => '1',
            'starts_from' => 0,
            'ends_at' => 1
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCriterias();

        foreach ($this->criterias as $criteria)
        {
            DB::table('scoring_criterias')->insert($criteria);
        }
    }
}
