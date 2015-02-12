<?php namespace Pingpong\Admin\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CalendarController extends BaseController {

    /**
     * Redirect not found.
     *
     * @return Response
     */
    protected function redirectNotFound()
    {
        return $this->redirect('users.index');
    }

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function indexSchedules()
    {
        $schedules= \Schedule::paginate(10);
        $no = $schedules->getFrom();
	$teachers = \Teacher::all()->keyBy('id');

        return $this->view('calendar.index-schedule', compact('schedules', 'no','teachers'));
    }
    
    public function indexReservations()
    {
        $reservations = \Reservation::paginate(10);
        $no = $reservations->getFrom();
	   
       $teachers = \Teacher::all()->keyBy('id');
	   $users = \User::all()->keyBy('id');

        return $this->view('calendar.index-reservation', compact('reservations', 'no','users','teachers'));
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function createSchedule()
    {
        $teachers = \Teacher::all();

        foreach ($teachers as $teacher) {
            $role[$teacher->id] = $teacher->first_name;
        }

        return $this->view('calendar.create-schedule',compact('role'));
    }

    public function createReservation()
    {
        $teachers = \Teacher::all();
        $users = \User::all();

        foreach ($teachers as $teacher) {
            $role[$teacher->id] = $teacher->first_name;
        }

        foreach ($users as $user) {
            $roleUser[$user->id] = $user->name;
        }

        return $this->view('calendar.create-reservation',compact('role','roleUser'));
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function storeSchedule()
    {
        app('Pingpong\Admin\Validation\Schedule\Create')->validate($data = $this->inputAll());

        $schedule = \Schedule::create($data);

        return $this->redirect('calendar.schedules');
    }

    public function storeReservation()
    {
        app('Pingpong\Admin\Validation\Reservation\Create')->validate($data = $this->inputAll());

        $schedule = \Reservation::create($data);

        return $this->redirect('calendar.reservations');
    }

    

    /**
     * Show the form for editing the specified user.
     *
     * @param  int $id
     * @return Response
     */
    public function editSchedules($id)
    {
        try
        {
            $schedule = \Schedule::findOrFail($id);

            $teachers = \Teacher::all();

            foreach ($teachers as $teacher) {
                $role[$teacher->id] = $teacher->first_name;
            }

            return $this->view('calendar.edit-schedule', compact('schedule','role'));
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    public function editReservation($id)
    {
        try
        {
            $reservations = \Reservation::findOrFail($id);
            $teachers = \Teacher::all();
            $users = \User::all();

            foreach ($teachers as $teacher) {
                $role[$teacher->id] = $teacher->first_name;
            }

            foreach ($users as $user) {
                $roleUser[$user->id] = $user->name;
            }

            return $this->view('calendar.edit-reservation', compact('reservations','role','roleUser'));
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    /**
     * Update the specified user in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function updateSchedule($id)
    {
        try
        {   
            $data = $this->inputAll();

            $schedule = \Schedule::findOrFail($id);
                
            app('Pingpong\Admin\Validation\Schedule\Update')->validate($data);
            
            $schedule->update($data);

            return $this->redirect('calendar.schedules');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    public function updateReservation($id)
    {
        try
        {   
            $data = $this->inputAll();

            $reservation = \Reservation::findOrFail($id);
                
            app('Pingpong\Admin\Validation\Reservation\Update')->validate($data);
            
            $reservation->update($data);

            return $this->redirect('calendar.reservations');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroySchedule($id)
    {
        try
        {
            \Schedule::destroy($id);

            return $this->redirect('calendar.schedules');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    public function destroyReservation($id)
    {
        try
        {
            \Reservation::destroy($id);

            return $this->redirect('calendar.reservations');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

}
