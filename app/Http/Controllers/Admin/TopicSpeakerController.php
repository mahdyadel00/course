<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TopicSpeaker\StoreTopicSpeaker;
use App\Http\Requests\Backend\TopicSpeaker\UpdateTopicSpeaker;
use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\TopicSpeaker;

class TopicSpeakerController extends Controller
{
    public function index()
    {
        $topics = TopicSpeaker::with('speaker')->get();
        return view('admin.topic_speakers.index', compact('topics'));
    }


    public function create()
    {
        $speakers = Speaker::get();
        return view('admin.topic_speakers.create', compact('speakers'));
    }
    public function store(StoreTopicSpeaker $request)
    {
        TopicSpeaker::create([
            'title'       => $request->title,
            'description' => $request->description,
            'speaker_id'  => $request->speaker_id,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'link'        => $request->link,
            'days'         => $request->days,
        ]);

        return redirect()->route('admin.topicSpeakers.index')->with('success', 'Topic Speaker created successfully');
    }

    public function show($id)
    {
        $topic = TopicSpeaker::findOrFail($id);
        return view('admin.topic_speakers.show', compact('topic'));
    }
    public function edit($id)
    {
        $topic = TopicSpeaker::findOrFail($id);
        $speakers = Speaker::get();
        return view('admin.topic_speakers.edit', compact('topic', 'speakers'));
    }


    public function update(UpdateTopicSpeaker $request, $id)
    {
        $topic = TopicSpeaker::findOrFail($id);
        $topic->update([
            'title'       => $request->title,
            'description' => $request->description,
            'speaker_id'  => $request->speaker_id,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'link'        => $request->link,
            'days'         => $request->days,
        ]);
        return redirect()->route('admin.topicSpeakers.index')->with('success', 'Topic Speaker updated successfully');
    }

    public function delete($id)
    {
        $topic = TopicSpeaker::findOrFail($id);
        $topic->delete();
        return redirect()->route('admin.topicSpeakers.index')->with('error', 'Topic Speaker deleted successfully');
    }
}
