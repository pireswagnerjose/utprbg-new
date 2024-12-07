<?php

namespace App\Livewire\Pages\Dashboard;

use App\Models\Pages\Prison\Prison;
use App\Models\Pages\Prisoner\Prisoner;
use App\Models\User;
use Livewire\Component;

class DashboardLivewire extends Component
{
    public $users;
    public $prisoners;
    public $provisory_prisoners;
    public $psychiatricPrisoner;
    public function mount()
    {
        $this->users = User::all();
        $this->prisoners = Prisoner::where('status_prison_id', 1)->with('prisons')->get();
        $this->provisory_prisoners = $this->getProvisoryPrisoner();
        $this->psychiatricPrisoner = $this->psychiatricPrisoner();
    }

    public function getProvisoryPrisoner()
    {
        // $data = Prison::select('prisons.*', 'prisoners.*')
        //     ->join('prisoners','prisons.prisoner_id','=','prisoners.id')
        //     ->where('prisoners.status_prison_id', 1)
        //     ->where('prisons.type_prison_id', 1)
        //     ->where('prisons.exit_date', null)
        //     ->get();

        $data = Prison::where('type_prison_id', 1)
            ->where('type_prison_id', 1)
            ->where('exit_date', null)
            ->whereRelation('prisoner', 'type_prison_id', 1)
            ->get();

        return $data;
    }
    public function psychiatricPrisoner()
    {
        $data = Prison::select('prisons.*', 'prisoners.*')
            ->join('prisoners','prisons.prisoner_id','=','prisoners.id')
            ->where('prisoners.status_prison_id', 1)
            ->where('prisons.type_prison_id', 4)
            ->where('prisons.exit_date', null)
            ->get();
        return $data;
    }
    public function render()
    {
        return view('livewire.pages.dashboard.dashboard-livewire');
    }
}
