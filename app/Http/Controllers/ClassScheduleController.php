<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassScheduleRequest;
use App\Http\Requests\UpdateClassScheduleRequest;
use App\Repositories\ClassScheduleRepository;
use Illuminate\Http\Request;
use App\Models\Classes;
use Flash;
use Response;

class ClassScheduleController extends AppBaseController
{
    /** @var ClassScheduleRepository */
    private $classScheduleRepository;

    public function __construct(ClassScheduleRepository $classScheduleRepo)
    {
        $this->classScheduleRepository = $classScheduleRepo;
    }

    /**
     * Display a listing of the ClassSchedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $class = Classes::all();

        $classSchedules = $this->classScheduleRepository->all();

        //dd($class);

        return view('class_schedules.index', compact('class'))
            ->with('classSchedules', $classSchedules);
    }

    /**
     * Show the form for creating a new ClassSchedule.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedules.create');
    }

    /**
     * Store a newly created ClassSchedule in storage.
     *
     * @param CreateClassScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateClassScheduleRequest $request)
    {
        $input = $request->all();

        $classSchedule = $this->classScheduleRepository->create($input);

        Flash::success('Class Schedule saved successfully.');

        return redirect(route('classSchedules.index'));
    }

    /**
     * Display the specified ClassSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSchedule = $this->classScheduleRepository->find($id);

        if (empty($classSchedule)) {
            Flash::error('Class Schedule not found');

            return redirect(route('classSchedules.index'));
        }

        return view('class_schedules.show')->with('classSchedule', $classSchedule);
    }

    /**
     * Show the form for editing the specified ClassSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSchedule = $this->classScheduleRepository->find($id);

        if (empty($classSchedule)) {
            Flash::error('Class Schedule not found');

            return redirect(route('classSchedules.index'));
        }

        return view('class_schedules.edit')->with('classSchedule', $classSchedule);
    }

    /**
     * Update the specified ClassSchedule in storage.
     *
     * @param int                        $id
     * @param UpdateClassScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassScheduleRequest $request)
    {
        $classSchedule = $this->classScheduleRepository->find($id);

        if (empty($classSchedule)) {
            Flash::error('Class Schedule not found');

            return redirect(route('classSchedules.index'));
        }

        $classSchedule = $this->classScheduleRepository->update($request->all(), $id);

        Flash::success('Class Schedule updated successfully.');

        return redirect(route('classSchedules.index'));
    }

    /**
     * Remove the specified ClassSchedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSchedule = $this->classScheduleRepository->find($id);

        if (empty($classSchedule)) {
            Flash::error('Class Schedule not found');

            return redirect(route('classSchedules.index'));
        }

        $this->classScheduleRepository->delete($id);

        Flash::success('Class Schedule deleted successfully.');

        return redirect(route('classSchedules.index'));
    }
}
