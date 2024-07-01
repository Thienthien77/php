# Database mongodb

## Basic define
<p>DB : Database </p>
<p>Collection : Table </p>
<p>Document : Row </p>
<p>Column : Field </p>

## Basic commands

<p> show all database </p>
<pre>show dbs</pre>

<p> select db </p>
<pre>use {name} </pre>

<p> show current db select </p>
<pre> db </pre>

<p> action </p>
<pre>
db.<collection>.<command>(find, insert, update, updateMany, ...)
</pre>


<p>create db </p>
<pre>
use shopping // Only declared, not created
</pre>

<p> insert first value </p>
<pre>
db.product.insertOne({name : "iphone1"}) // create and insert first value
</pre>

## Data type
<p><b>Boolean</b></p>
<p><b>Null</b></p>
<p><b>Number (Integer, Double)</b></p>
<p><b>String</b></p>
<p><b>BigInt</b></p>
<p><b>Object, Array</b></p>
<p><b>Symbol</b></p>
<p><b>Date</b></p>
<p><b>Object Id</b></p>

<pre>
db.product.insertOne({
    name : "iphone1",
    price : 10000000,
    price2 : 1000.123456,
    date : new Date(),
    available : true,
})
</pre>

### Object Id
<pre> ObjectId() </pre>
- 24 characters
- auto increment
- New document create _id is auto Object Id
- Method 
  - getTimestamp()
  - valueOf()
  - toString()

<pre>
db.product.findOne()
db.product.findOne()._id
db.product.findOne()._id.toString()
db.product.findOne()._id.getTimestamp()
</pre>

## Query Data
<pre>
db.<collection>.find(query)

query = {
    key : value
}
</pre>

### with conditions
<pre>
{ key : {$ne : value } }
{ key : {$gt : value } }
{ key : {$gte : value } }
{ key : {$lt : value } }
{ key : {$lte : value } }
{ key : {$in : value } }
{ key : {$nin : value } }
</pre>
#### Example
<pre>
db.users.find({Identifier : 9012});
db.users.find({Identifier : {$gt : 9012} });
</pre>

### Regular expression
- ^ : start
- $ : end
<pre>
db.example.find({Email : /.info/})
</pre>

## Query multiple Conditions
#### AND
<pre>
db.<collection>.find({
  key : value,
  key : value
})

db.example.find({Email : /.info/}, {Country : 'Slovenia'})
</pre>
#### OR
<pre>
db.example.find({ $or : [{Email : /.info/}, {Country : 'Slovenia'}] })
</pre>

<pre>
db.example.find({ $or : [{Email : /.info/}, {Country : 'Slovenia'}], LastName : 'Goodman' })
</pre>

#### where
<p> Can use $this</p>
<pre>
db.<collection>.find({
  $where : "expression javascript."
})
</pre>

## Nested Object
<pre>
db.detail.find({"ob.name" : "ok"})
</pre>

## Array
<pre>
db.user.find({ "languages" : "English"})
db.user.find({ languages : {$site: 2} })
</pre>

## Update
<p>Method</p>

- updateOne()
- updateMany()
<pre>
db.<collection>.updateOne(whatToUpdate, howToUpdate)

whatToUpdate = {
  _id : ObjectId('213213ef5..')
}
howToUpdate = {
  $set : {
    key : value,
    key : value
  }
}

db.detail.updateOne({_id : ObjectId('668185b966ce88c4e970cf5b')} , {$set : {LastName : "TinhDOan"}})
</pre>

## Delete
<p>Method</p>

- deleteOne()
- deleteMany()
<pre>
db.<collection>.deleteOne(whatToDelete)

whatToDelete = {
  _id : ObjectId('213213ef5..')
}

db.detail.deleteOne({_id : ObjectId('668185b966ce88c4e970cf5b')})
</pre>

