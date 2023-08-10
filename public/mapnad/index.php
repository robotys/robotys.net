<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Map</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card w-90">
	<div class="card-header">
		Outcome Map Lookup
	</div>
	<div class="card-body">	
		<div class="form-group mb-3">
			<label><small>Your Learning Outcome:</small></label>
			<form method="post">
				<div class="input-group">
					<input type="text" name="lo" class="form-control" value="Explain the key concepts of social change and human cultural">
					<input type="submit" class="btn btn-primary btn-submit" value="Submit">
				</div>
			</form>
		</div>

		<label><small>Domain:</small></label>
		<textarea name="domain" class="form-control" style="height: 150px"></textarea>
	</div>
	<div class="card-footer text-end" style="font-size: 0.7em">
		From Seremban with ❤️
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
let map = {
	"cognitive": {
		"key": "cognitive",
		"label": "Cognitive Domain",
		"group": {
			"C1":{
				"key": "knowledge",
				"code": "C1",
				"label": "Knowledge",
				"description": "Knowledge of terms, facts, conventions, classifications, etc.",
				"verb": ["Define","Describe","Identify","Label","List","Name","Recognize","Recall","Repeat","State"]
			},
			"C2":{
				"key": "comprehension",
				"code": "C2",
				"label": "Comprehension",
				"description": "Comprehension of ideas, translations, interpretations, extrapolation",
				"verb": ["Characterize","Classify","Convert","Defend","Discuss","Distinguish","Establish","Estimate","Explain","Express","Extend","Generalized","Illustrate","Indicate","Infer","Locate","Paraphrase","Predict","Recognize","Relate","Review","Rewrite","Summarize","Translate"]
			},
			"C3":{
				"key": "application",
				"code": "C3",
				"label": "Application",
				"description": "Use of knowledge, problem solving, etc.",
				"verb": ["Apply","Change","Choose","Compute","Demonstrate","Discover","Dramatize","Employ","Interpret","Manipulate","Model","Modify","Operate","Practice","Predict","Prepare","Produce","Relate","Schedule","Show","Sketch","Solve","Use","Write"]
			},
			"C4":{
				"key": "analysis",
				"code": "C4",
				"label": "Analysis",
				"description": "Examination of parts of information",
				"verb": ["Analyze","Appraise","Breakdown","Calculate","Categorize","Compare","Contrast","Criticize","Diagram","Differentiate","Discriminate","Distinguish","Examine","Experiment","Identify","Illustrate","Infer","Model","Outline","Point out","Question","Relate","Select","Separate","Subdivide","Test"]
			},
			"C5":{
				"key": "synthesis",
				"code": "C5",
				"label": "5ynthesis",
				"description": "Fusion of ideas to produce unique plan, structure, pattern, etc",
				"verb": ["Arrange","Assemble","Collect","Combine","Comply","Compose","Construct","Create","Design","Develop","Devise","Explain","Formulate","Generate","Plan","Prepare","Rearrange","Reconstruct","Relate","Reorganize","Revise","Rewrite","Set up","Synthesize","Tell","Write"]
			},
			"C6":{
				"key": "evaluation",
				"code": "C6",
				"label": "Evaluation",
				"description": "Forming judgments based on criteria and evidence",
				"verb": ["Appraise","Argue","Assess","Choose","Compare","Conclude","Contrast","Defend","Discriminate","Estimate","Evaluate","Explain","Interpret","Judge","Justify","Predict","Rate","Relate","Select","Support","Value "]
			}
		}
	},
	"affective": {
		"key": "affective",
		"label": "Affective Domain",
		"group": {
			"A1": {
				"key": "receiving",
				"label": "Receiving",
				"code": "A1",
				"description":"Attend to stimuli",
				"verb": ["Ask","Acknowledge","Attend (to)","Follow","Listen","Meet","Observe","Receive"]
			},
			"A2": {
				"key": "responding",
				"label": "Responding",
				"code": "A2",
				"description":"React to stimuli",
				"verb": ["Agree","Allow","Answer","Ask","Assist","Attempt","Choose","Communicate","Comply","Conform","Cooperate","Demonstrate","Describe","Discuss","Display","Exhibit","Follow","Give","Help","Identify","Locate","Notify","Obey","Offer","Participate (in)","Present","Read","Relay","Reply","Report","Respond","Select","Try"]
			},
			"A3": {
				"key": "valuing",
				"label": "Valuing",
				"code": "A3",
				"description":"Attach significance to ideas",
				"verb": ["Adopt","Aid","Care (for)","Complete","Complement","Contribute","Delay","Encourage","Endorse","Enforce","Evaluate","Expedite","Foster","Guide","Initiate","Interact","Join","Justify","Maintain","Monitor","Praise","Preserve","Propose","Query","React","Respect","Seek","Share","Study","Subscribe","Suggest","Support","Thank","Uphold"]
			},
			"A4": {
				"key": "organization",
				"label": "Organization",
				"code": "A4",
				"description":"Attach significance to ideas",
				"verb": ["Anticipate","Collaborate","Confer","Consider","Consult","Coordinate","Design","Direct","Establish","Facilitate","Follow through","Investigate","Judge","Lead","Manage","Modify","Organize","Oversee","Plan","Qualify","Recommend","Revise","Simplify","Specify","Submit","Synthesize","Test","Vary","Weigh"]
			},
			"A5": {
				"key": "characterization",
				"label": "Characterization",
				"code": "A5",
				"description":"Internalize values that guide behavior",
				"verb": ["Act","Administer","Advance","Advocate","Aid","Challenge","Change","Commit (to)","Counsel","Criticize","Debate","Defend","Disagree","Dispute","Empathize","Enhance","Excuse","Forgive","Influence","Motivate","Negotiate","Object","Persevere","Persist","Praise","Profess","Promote","Promulgate","Question","Reject","Resolve","Seek","Serve","Strive","Solve","Tolerate","Volunteer (for)"]
			},
		}
	},
	"psychomotor": {
		"key": "psychomotor",
		"label": "Skill (Psychomotor) Domain",
		"group": {
			"P1": {
				"key": "perception",
				"label": "Perception",
				"code": "P1",
				"description":"Use of senses to obtain clues",
				"verb": ["Choose","Describe","Detect","Differentiate","Distinguish","Identify","Isolate","Relate","Select","Separate"]
			},
			"P2": {
				"key": "set",
				"label": "Set",
				"code": "P2",
				"description":"Readiness to take action",
				"verb": ["Begin","Display","Explain","Move","Proceed","React","Respond","Show","Start","Volunteer"]
			},
			"P3": {
				"key": "guided_response",
				"label": "Guided Response",
				"code": "P3",
				"description":"Knowledge of the steps required to perform a task",
				"verb": ["Assemble","Build","Calibrate","Construct","Dismantle","Display","Dissect","Fasten","Fix","Grind","Heat","Manipulate","Measure","Mend","Mix","Organize","Sketch","Work"]
			},
			"P4": {
				"key": "mechanism",
				"label": "Mechanism",
				"code": "P4",
				"description":"Perform tasks in habitual manner",
				"verb": ["Assemble","Build","Calibrate","Construct","Dismantle","Display","Dissect","Fasten","Fix","Grind","Heat","Manipulate","Measure","Mend","Mix","Organize","Sketch","Work"]
			},
			"P5": {
				"key": "complex_overt_response",
				"label": "Complex Overt Response",
				"code": "P5",
				"description":"Skillful performance of motor acts",
				"verb": ["Assemble","Build","Calibrate","Construct","Dismantle","Display","Dissect","Fasten","Fix","Grind","Heat","Manipulate","Measure","Mend","Mix","Organize","Sketch","Work"]
			},
			"P6": {
				"key": "adaptation",
				"label": "Adaptation",
				"code": "P6",
				"description":"Skillful performance of motor acts and modification of movement in problematic or new situation",
				"verb": ["Adapt","Alter","Change","Rearrange","Reorganize","Revise","Dissect"]
			},
			"P7": {
				"key": "origination",
				"label": "Origination",
				"code": "P7",
				"description":"Creating new movement patterns for problematic or new situation; creates new tasks that incorporate learned ones",
				"verb": ["Arrange","Combine","Compose","Construct","Design","Originate"]
			},
		}
	}
}


$(document).ready(function(){
	
	let index = {};
	let domain = {};

	$.each(map, function(dom, obj){

		$.each(obj.group, function(key, group){
			// console.log(group);
			$.each(group.verb, function(i, str){
				str = str.toLowerCase();

				if(Object.keys(index).indexOf(str) == -1)
				{
					index[str] = [];
				}

				if(index[str].indexOf(group.code) == -1)
				{
					domain[group.code] = obj.label+" ("+group.code+": "+group.label+")";
					// console.log(domain);
					index[str].push(group.code);
				}
				// console.log(str);
			});
		});
	});

	// console.log(domain);

	$('form').submit(function(e){
		e.preventDefault();



		$('[name=domain]').val();

		let val = $('[name=lo]').val();

		if(val != '')
		{
			exp = val.split(' ');

			let res = [];

			$.each(exp, function(i, str){
				if(Object.keys(index).indexOf(str.toLowerCase()) != -1)
				{
					$.each(index[str], function(ii, code){
						if(res.indexOf(code) == -1) res.push(code);
					});
				}
			});

			let str = [];

			$.each(res, function(i, code){
				str.push(domain[code]);
			});

			$('[name=domain]').val(str.join(', '));
			
			console.log(res);
		}

	});
});


</script>
</body>
</html>