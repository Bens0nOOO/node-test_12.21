const express = require('express');

// 此程式碼片段為 Express.js 應用程式建立一個路由器。
const router = express.Router();
const userController = require('../controllers/userController');

const Clothes_index = [''];

// 此程式碼片段定義 URL根（“/”）的路由
router.get("/apple", (req, res) => {
    res.render("test");
}
);
//userController.getUsers
// 匯出路由器以供應用程式的其他部分使用。
module.exports = router;
// Explain code block: index_route.js