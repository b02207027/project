package com.example.purchasecar;

import android.content.Context;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.app.NotificationCompatSideChannelService;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.LayoutInflater;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.CompoundButton;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

import java.text.FieldPosition;

public class MainActivity extends AppCompatActivity {

    Button check;
    TextView purchasedItem;
    TextView totalPrice;
    ListView items;
    int[] logo = new int[]{R.drawable.banana,R.drawable.watermelon,R.drawable.pear,R.drawable.peach};
    String[] fruit = new String[]{"香蕉","西瓜","梨子","水蜜桃"};
    String[] engNames = new String[]{"banana","watermelon","pear","peach"};
    int[] fruitPrice = new int[]{100,200,300,400};
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        check = (Button)findViewById(R.id.check);
        purchasedItem = (TextView)findViewById(R.id.purchasedItem);
        totalPrice = (TextView)findViewById(R.id.totalPrice);
        items = (ListView)findViewById(R.id.items);
        MyAdapter adapter = new MyAdapter(this);
        items.setChoiceMode(ListView.CHOICE_MODE_MULTIPLE);
        items.setAdapter(adapter);
        items.setOnItemClickListener(lstListener);
        check.setOnClickListener(btnListener);
        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Snackbar.make(view, "Replace with your own action", Snackbar.LENGTH_LONG)
                        .setAction("Action", null).show();
            }
        });
    }

    public class MyAdapter extends BaseAdapter{
        private LayoutInflater myInflater;
        public MyAdapter(Context c){
            myInflater = LayoutInflater.from(c);
        }
        @Override
        public int getCount(){
            return fruit.length;
        }
        @Override
        public Object getItem(int position){
            return fruit[position];
        }
        public long getItemId(int position){
            return position;
        }
        public View getView(int position, View convertView, ViewGroup parent){
            convertView = myInflater.inflate(R.layout.mylayout,null);
            ImageView imgLogo = (ImageView)convertView.findViewById(R.id.imgLogo);
            TextView name = (TextView)convertView.findViewById(R.id.name);
            TextView engName = (TextView)convertView.findViewById(R.id.engName);
            imgLogo.setImageResource(logo[position]);
            name.setText(fruit[position]);
            engName.setText(engNames[position]);
            return convertView;
        }
    }

    private ListView.OnItemClickListener lstListener = new ListView.OnItemClickListener() {
        @Override
        public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
            String sel = parent.getItemAtPosition(position).toString();
            if(items.isItemChecked(position))
            {
                setTitle(sel + " 每斤： " + fruitPrice[position] + " 元");
            }
            else
            {
                setTitle("取消購買：" + items.getItemAtPosition(position).toString());
            }
        }
    };
    private Button.OnClickListener btnListener = new Button.OnClickListener() {
        @Override
        public void onClick(View v) {
            String itemtext = "選購了：";
            String pricetext = "總額：";
            int price = 0;
            for(int i = 0; i < fruit.length; i++)
            {
                if(items.isItemChecked(i))
                {
                    itemtext = itemtext + " " + items.getItemAtPosition(i).toString();
                    price = price + fruitPrice[i];
                }
            }
            purchasedItem.setText(itemtext);
            totalPrice.setText(pricetext + price + "元");
        }
    };
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
