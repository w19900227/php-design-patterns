You will think a error, But it doesn't one.

Because it using setState that method in OnState, OffState, BrighterLight and BrightestLight, It already change state at now.

### Request 
`/state/ex2`

### Response
	Now State : OnState
	下一步：開燈
	After State : BrighterLight
	------------------
	Now State : BrighterLight
	下一步：稍亮
	After State : BrightestLight
	------------------
	Now State : BrightestLight
	下一步：最亮
	After State : OffState
	------------------
	Now State : OffState
	下一步：關燈
	After State : OnState
	------------------
	Now State : OnState
	下一步：開燈
	After State : BrighterLight
	------------------
	------------------
	Now State : BrighterLight
	上一步：開燈
	After State : OnState
	------------------
	Now State : OnState
	上一步：關燈
	After State : OffState
	------------------
	Now State : OffState
	上一步：最亮
	After State : BrightestLight
	------------------
	Now State : BrightestLight
	上一步：稍亮
	After State : BrighterLight

