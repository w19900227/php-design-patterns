
### Request 
`/structural/bridge/ex2/`

### Response
	Mac : 
	OSX 電源開啟…
	OSX Memory準備…
	OSX CPU準備…

	華碩電腦 : 
	Windows 電源開啟…
	Windows Memory準備…
	Windows CPU準備…

	Msi : 
	Windows 電源開啟…
	Windows Memory準備…
	Windows CPU準備…

跟facade pattern很相似，但是差異在於。
1. bridge用於將已有物件的元素，用另一個物件做「橋接封裝」做額外的處理。
2. facade主要在於，將流程、邏輯等包裝在一個物件去控制，對外而言會簡化更多流程。