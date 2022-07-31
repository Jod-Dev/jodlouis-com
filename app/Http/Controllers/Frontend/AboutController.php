<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Counter;
use App\Models\Admin\Education;
use App\Models\Admin\EducationList;
use App\Models\Admin\ExperienceList;
use App\Models\Admin\PersonelInfo;
use App\Models\Admin\Section;
use App\Models\Admin\Skill;
use App\Models\Admin\SkillList;
use App\Models\Admin\InfoList;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieving models
        $about = About::first();
        $personel_info = PersonelInfo::first();
        $info_lists = InfoList::orderBy('order', 'asc')
            ->get();
        $counters = Counter::orderBy('order', 'asc')
            ->get();
        $skill = Skill::first();
        $skill_lists = SkillList::orderBy('order', 'asc')
            ->get();
        $education = Education::first();
        $education_lists = EducationList::orderBy('order', 'asc')
        ->get();
        $experience_lists = ExperienceList::orderBy('order', 'asc')
        ->get();


        return view('frontend.about.index', compact('about', 'personel_info', 'info_lists',
            'counters', 'skill', 'skill_lists', 'education', 'education_lists', 'experience_lists'));
    }

}
