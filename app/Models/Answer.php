<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
		protected $fillable = [
			'exam_id',
			'exam_sessions_id',
			'question_id',
			'student_id',
			'question_order',
			'answer_order',
			'answer',
			'is_correct'
		];

		public function exam()
		{
				return $this->belongsTo(Exam::class);
		}

		public function exam_session()
		{
				return $this->belongsTo(ExamSession::class);
		}
		public function student()
		{
				return $this->belongsTo(Student::class);
		}

		public function question()
		{
				return $this->belongsTo(Question::class);
		}
}
