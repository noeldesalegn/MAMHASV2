<?php

namespace App\Livewire;

use App\Models\appointment_detail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AppointmentTable extends Component
{
    #[validate('required')]

    public $search = '';
    public $appointments = [];

    public function updatedSearch($value)
    {
        $this->reset('appointments');
        $this->validate();
        $searchTerm = '%' . $value . '%';
        $this->appointments = appointment_detail::with('patient')
            ->whereHas('patient', function($q) use ($searchTerm) {
                $q->where('FName', 'LIKE', $searchTerm)
                    ->orWhere('LName', 'LIKE', $searchTerm);
            })
            // If you also want to search appointment_details’ own columns (e.g. status), chain orWhere(…)
            ->get();
    }
    public function clearSearch(){
        $this->reset('search', 'appointments');
    }
    public function render()
    {
        return view('livewire.appointment-table', [
            'appointments' => $this->appointments,
        ]);
    }
}
