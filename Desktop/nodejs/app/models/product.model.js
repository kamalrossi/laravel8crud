const mongoose = require('mongoose');

const ProductSchema = mongoose.Schema({
    name: String,
    description: String
}, {
    timestamps: true
});

module.exports = mongoose.model('Product', ProductSchema);