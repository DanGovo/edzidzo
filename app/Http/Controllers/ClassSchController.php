<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchRequest;
use App\Http\Requests\UpdateClassSchRequest;
use App\Repositories\ClassSchRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Classes;
use App\Models\Course;

class ClassSchController extends AppBaseController
{
    /** @var ClassSchRepository */
    private $classSchRepository;

    public function __construct(ClassSchRepository $classSchRepo)
    {
        $this->classSchRepository = $classSchRepo;
    }

    /**
     * Display a listing of the ClassSch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $class = Classes::all();
        $course = Course::all();

        //dd($course);

        $classSches = $this->classSchRepository->all();

        return view('class_sches.index', compact('class', 'course'))
            ->with('classSches', $classSches);
    }

    /**
     * Show the form for creating a new ClassSch.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_sches.create');
    }

    /**
     * Store a newly created ClassSch in storage.
     *
     * @param CreateClassSchRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchRequest $request)
    {
        $input = $request->all();

        $classSch = $this->classSchRepository->create($input);

        Flash::success('Class Sch saved successfully.');

        return redirect(route('classSches.index'));
    }

    /**
     * Display the specified ClassSch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSch = $this->classSchRepository->find($id);

        if (empty($classSch)) {
            Flash::error('Class Sch not found');

            return redirect(route('classSches.index'));
        }

        return view('class_sches.show')->with('classSch', $classSch);
    }

    /**
     * Show the form for editing the specified ClassSch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSch = $this->classSchRepository->find($id);

        if (empty($classSch)) {
            Flash::error('Class Sch not found');

            return redirect(route('classSches.index'));
        }

        return view('class_sches.edit')->with('classSch', $classSch);
    }

    /**
     * Update the specified ClassSch in storage.
     *
     * @param int                   $id
     * @param UpdateClassSchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchRequest $request)
    {
        $classSch = $this->classSchRepository->find($id);

        if (empty($classSch)) {
            Flash::error('Class Sch not found');

            return redirect(route('classSches.index'));
        }

        $classSch = $this->classSchRepository->update($request->all(), $id);

        Flash::success('Class Sch updated successfully.');

        return redirect(route('classSches.index'));
    }

    /**
     * Remove the specified ClassSch from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSch = $this->classSchRepository->find($id);

        if (empty($classSch)) {
            Flash::error('Class Sch not found');

            return redirect(route('classSches.index'));
        }

        $this->classSchRepository->delete($id);

        Flash::success('Class Sch deleted successfully.');

        return redirect(route('classSches.index'));
    }
}
