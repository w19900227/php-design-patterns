
## 敘述
假設去美國、日本購買商品時，除了商品金額外要再加上服務費金額，才等於商品總金額。

以上條件是現金付款，在不更動原程式情況下，想額外加入信用卡付款條件給予0.9的優惠，所以使用Adapter design pattern做轉接。

### Request 
`/adapter/ex2`

### Response
    Using Cash - JP : 120
	Using Cash - US : 100
	Using Card - US : 90