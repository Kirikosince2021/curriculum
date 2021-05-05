package dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import model.Info;


public class MainDAO {
    private static final String POSTGRES_DRIVER = "org.postgresql.Driver";
    //🌟
    private static final String JDBC_CONNECTION = "jdbc:postgresql://localhost:5433/CreditCardInfo";
    private static final String USER = "postgres";
    private static final String PASS = "bahamuru27";
    public boolean register(Info info) {
        Connection connection = null;
        try {
            // データベースに接続する準備
            Class.forName(POSTGRES_DRIVER);
            //接続先の情報
            connection = DriverManager.getConnection(JDBC_CONNECTION, USER, PASS);
            String SQL = "INSERT INTO CREDITCARD(ID,PASS,YEAR,MONTH,DAY,MONEY,REASON)"
            		+ "VALUES(?,?,?,?,?,?,?)";
            PreparedStatement preparedStatement = connection.prepareStatement(SQL);
            preparedStatement.setString(1, info.getId());
            preparedStatement.setString(2, info.getPass());
            preparedStatement.setInt(3, info.getYear());
            preparedStatement.setInt(4, info.getMonth());
            preparedStatement.setInt(5, info.getDay());
            preparedStatement.setInt(6, info.getMoney());
            preparedStatement.setString(7, info.getReason());

            int result = preparedStatement.executeUpdate();
            if(result != 1) {
            	return false;
            }

        // forName()で例外発生
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        // getConnection()で例外発生
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            try {
                if (connection != null) {
                    // データベースを切断
                    connection.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        return true;
    }

    public List<Info> find(int year, int month) {
        Connection connection = null;
        List<Info> infoList = new ArrayList<Info>();
        try {
            // データベースに接続する準備
            Class.forName(POSTGRES_DRIVER);
            //接続先の情報
            connection = DriverManager.getConnection(JDBC_CONNECTION, USER, PASS);
            String SQL = "SELECT YEAR,MONTH,DAY,MONEY,REASON FROM CREDITCARD WHERE YEAR = ? AND MONTH = ? ORDER BY DAY";
            PreparedStatement preparedStatement = connection.prepareStatement(SQL);
            preparedStatement.setInt(1, year);
            preparedStatement.setInt(2, month);



            ResultSet resultSet = preparedStatement.executeQuery();
            while(resultSet.next()) {
            	Info info = new Info();
            	info.setYear(resultSet.getInt("YEAR"));
            	info.setMonth(resultSet.getInt("MONTH"));
            	info.setDay(resultSet.getInt("DAY"));
            	info.setMoney(resultSet.getInt("MONEY"));
            	info.setReason(resultSet.getString("REASON"));
            	infoList.add(info);

            }

        // forName()で例外発生
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        // getConnection()で例外発生
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            try {
                if (connection != null) {
                    // データベースを切断
                    connection.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        return infoList;
    }
}